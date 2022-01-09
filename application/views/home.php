<div style = "max-width : 1000px;margin:auto;"> 
<div class="accordion"
style = "margin:20px 0;"
id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        $_SERVER
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body" style  = "word-break : break-word;">
        
    <?php echo json_encode($_SERVER); ?>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        $_COOKIE
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body" style  = "word-break : break-word;" >
        <?php echo json_encode($_COOKIE); ?>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        $_POST
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body" style  = "word-break : break-word;" >
       <?php echo json_encode($_POST); ?>
    </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md">
    <div class="card">
  <img
    src="https://picsum.photos/300/200"
    class="card-img-top"
    alt="Fissure in Sandstone"
  />
  <div class="card-body">
    <h5 class="card-title">B.Sc. Form</h5>
    <p class="card-text">
      This is a From for your better future in this lovely world.
      Always be happy and stay safe.
    </p>
    <a class="btn btn-primary" href="<?php echo(base_url() . "home/form") . "?type=bsc"; ?>" >Apply</a>
  </div>
</div>
    </div>
    <div class="col-md">
    <div class="card">
  <img
    src="https://picsum.photos/300/200"
    class="card-img-top"
    alt="Fissure in Sandstone"
  />
  <div class="card-body">
    <h5 class="card-title">B.Tech Form</h5>
    <p class="card-text">
      This is a From for your better future in this lovely world.
      Always be happy and stay safe.
    </p>
    <a class="btn btn-primary" href="<?php echo(base_url() . "home/form") . "?type=btech"; ?>" >Apply</a>
  </div>
</div>
    </div>
    <div class="col-md">
    <div class="card">
  <img
    src="https://picsum.photos/300/200"
    class="card-img-top"
    alt="Fissure in Sandstone"
  />
  <div class="card-body">
    <h5 class="card-title">B.Pharma Form</h5>
    <p class="card-text">
      This is a From for your better future in this lovely world.
      Always be happy and stay safe.
    </p>
    <a class="btn btn-primary" href="<?php echo(base_url() . "home/form") . "?type=msc"; ?>" >Apply</a>
  </div>
</div>
    </div>
  </div>
</div>

</div>