<div class="main_form" style = "margin:auto; max-width : 1000px;min-height:70vh;">
<?php 
if($type === "msc"){
    echo "<h1  style = 'margin:10px;' align = 'center'>M.Sc. Form</h1>";
}else if($type === "bsc"){
    echo "<h1  style = 'margin:10px;' align = 'center'>B.Sc. Form</h1>";
}else if($type === "btech"){
    echo "<h1  style = 'margin:10px;' align = 'center'>B.Tech. Form</h1>";
}else{
    die("<h1  style = 'margin:10px;' align = 'center'>you are lost go <a href = '". base_url() . "home" ."''>Home</a>!!!</h1>");
}
?>

<form method= "POST"  enctype = "multipart/form-data"
 action="<?php echo base_url()."home/form_submit"?>" style = "display:block;max-width:500px;margin:20px auto;" >

<style>
  .form_photo{
    width:100%;
    display:flex;
    place-items: center;
    justify-content: center;
  }.photo{
    margin:auto auto;
    background-color:red;
    background : center/contain url(<?php echo base_url().'statics/images/upload_photo.svg';?>) no-repeat;
    height:150px;
    width:120px;
    border-radius:10px;
  }#photo:[value=''] + .photo::before{
    content : '+';font-size:50px;background-color:#0062ff;color:white; text-indent: 5px;
    line-height: 40px;
    display:block;width:40px;height:40px;border-radius:100%;    margin-left: calc(100% - 25px);
  }
  </style>

  <div class = "form_photo">
    <input type ="file" oninput = "change_photo()" name = "profile_photo" id = "photo" accept = ".jpg , .png , .jpeg" hidden >
    <label class ="photo" id="photo_label" for = "photo" ></label>
    
    <script>
      function change_photo(){
        const label = document.getElementById('photo_label');
        const input = document.getElementById('photo');
        label.style.backgroundImage = `url(${URL.createObjectURL(input.files[0])})`;
      }
    </script>
</div>

<div class="form-outline" style = "margin:30px 20px;">
  <input max="30" min="2" style="border-bottom-width: 2px;
    border-bottom-style: solid;" required type="text" id="full_name" name = "full_name" class="form-control form-control-lg" autocomplete="off" />
  <label class="form-label" for="full_name">Full Name</label>
</div>
<div class="form-outline" style = "margin:30px 20px;">
    <input max="30" min="2" style="border-bottom-width: 2px;
      border-bottom-style: solid;" required type="text" id="father_name" name = "father_name" class="form-control form-control-lg" autocomplete="off" />
    <label class="form-label" for="father_name">Father's Name</label>
  </div>
<div class="form-outline" style = "margin:30px 20px;">
    <input max="30" min="2" style="border-bottom-width: 2px;
      border-bottom-style: solid;" required type="text" id="mother_name" name = "mother_name" class="form-control form-control-lg" autocomplete="off" />
    <label class="form-label" for="mother_name">Mother's Name</label>
  </div>

  <div class="col-12" style = "display: flex;
    justify-content: center;margin:50px 0;">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>

</form>

</div>
