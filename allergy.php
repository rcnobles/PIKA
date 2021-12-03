<!DOCTYPE html>
<html>
  <head>
    <title>Allergy Page</title>
    <link rel="stylesheet" type="text/css" href="allergy.css" />
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Allergy List </h1>
          </div>
          <div class="panel-body">
            <form action="connectAllergy.php" method="post">
              <div class="form-group">
                <label for="inAllergy">Insert Allergy</label>
                <input
                  type="text"
                  class="form-control"
                  id="inAllergy"
                  name="inAllergy"
                />
              </div>
              <div class="form-group">
                <label for="product">Common In</label>
                <input
                  type="text"
                  class="form-control"
                  id="product"
                  name="product"
                />
              </div>
			  <div class="form-group">
                <label for="symptoms">Symptoms</label>
                <div>
                  <label for="rash" class="radio-inline"
                    ><input
                      type="radio"
                      name="symptoms"
                      value="rash"
                      id="rash"
                    />Rash</label
                  >
                  <label for="swelling" class="radio-inline"
                    ><input
                      type="radio"
                      name="symptoms"
                      value="swelling"
                      id="swelling"
                    />Swelling</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="symptoms"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>