<?php
require_once __DIR__ . '/vendor/autoload.php'; // Load the Google API PHP client library

$client = new Google_Client();
$client->setApplicationName('My App');
$client->setScopes([Google_Service_Calendar::CALENDAR_EVENTS]);
$client->setAuthConfig('path/to/credentials.json');
$service = new Google_Service_Calendar($client);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $date = $_POST['date'];
  $time = $_POST['time'];
  $location = $_POST['location'];
  $attendees = $_POST['attendees'];
  $agenda = $_POST['agenda'];
  
  $startDateTime = new DateTime("$date $time");
  $endDateTime = clone $startDateTime;
  $endDateTime->modify('+1 hour');
  
  $event = new Google_Service_Calendar_Event([
    'summary' => 'Meeting',
    'location' => $location,
    'description' => $agenda,
    'start' => [
      'dateTime' => $startDateTime->format('c'),
      'timeZone' => 'America/New_York',
    ],
    'end' => [
      'dateTime' => $endDateTime->format('c'),
      'timeZone' => 'America/New_York',
    ],
    'attendees' => [
      ['email' => $attendees],
    ],
  ]);

  $calendarId = 'primary';
  $event = $service->events->insert($calendarId, $event);
  
  echo 'Meeting created!';
}
?>
