<!DOCTYPE html>
<html lang="mr">
<head>
  <title>ॲडमिन रजिस्ट्रेशन फॉर्म</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  body{
        background-color:#c7c5f0	;
       }
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 14px;
padding-left: .5em;
padding-right: .5em;
}
.card-registration .select-arrow {
top: 6px;
}
.img-container {
  width: 100%;
  height: 100%;
  display: flex;
  padding-left: 1.5em;
  justify-content: center;
  align-items: center;
}

.img-container img {
  max-width: 100%;
  max-height: 100%;
}

.small-input {
  font-size: 14px;
  padding: 0.5rem;
}

</style>
<body>
    <div class="form">
<form method="POST" action="regback.php">
<section class="h-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
  <div class="img-container">
    <img src="4.jpg" alt="Sample photo" class="img-fluid" />
  </div>
</div>

            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase" style="color:#643b9f"><b>ॲडमिन रजिस्ट्रेशन फॉर्म</b></h3>

                <div class="form-outline mb-2">
                  <input type="text" id="form3Example8" name= "fullname" class="form-control form-control-sm" />
                  <label class="form-label" for="form3Example8">पूर्ण नाव ( आडनाव - नाव - मधले नाव )</label>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m1" name="village" class="form-control form-control-sm" />
                      <label class="form-label" for="form3Example1m1">गाव/शहर</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-2">
                    <div class="form-outline">
                      <input type="text" name = "HouseNo" onkeypress="return /[0-9]/i.test(event.key)" id="form3Example1n1" class="form-control form-control-sm" />
                      <label class="form-label" for="form3Example1n1">घर क्रमांक</label>
                    </div>
                  </div>
                </div>


                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">लिंग:</h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" name = "gender" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">स्त्री</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">पुरुष</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">इतर</label>
                  </div>

                </div>

  

                <div class="form-outline mb-2">
                  <input type="date" name = "date" id="form3Example9" class="form-control form-control-sm" />
                  <label class="form-label" for="form3Example9">जन्मदिनांक</label>
                </div>
                <div class="form-outline mb-2">
                  <input type="text" name = "PhoneNo" onkeypress="return /[0-9]/i.test(event.key)" id="form3Example97" class="form-control form-control-sm" />
                  <label class="form-label" for="form3Example97">फोन नंबर</label>
                </div>
                <div class="form-outline mb-2">
                  <input type="text" name= "Uname" id="form3Example90" class="form-control form-control-sm" />
                  <label class="form-label" for="form3Example90">यूजरनेम</label>
                </div>
               <div class="form-outline mb-2">
                  <input type="password" name = "Pass" id="form3Example4cg" class="form-control form-control-sm" />
                  <label class="form-label" for="form3Example4cg">पासवर्ड</label>
                </div>

                <div class="form-outline mb-2">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-sm" />
                  <label class="form-label" for="form3Example4cdg">तुमचा पासवर्ड पुन्हा करा</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg"onclick="history.back()">मागे जा</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2"style="background-color:#643b9f; color:white">साइन अप</button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</div>
</body>
</html>