<div class="banner--top">
    <h1 class="heading">Rider Application</h1>
</div>   
     
<div class="content">

<form class="container" method="POST" enctype="multipart/form-data" >                                


    <p class="text-paragraph alert alert-info">For every rider who signs up before January 6, 2020 as part of your signing bonus and commitment we’ll be sending you a Rooster Tires jersey with your name and number on it.</p> 

        
        <div class="mb-4 row">
            <div class="col">
                <label for="firstName">Full Name</label>
                <input type="text" class="form-control meri" id="firstName" name="firstName" placeholder="Full Name">
            </div>
            <div class="col">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control meri" id="lastName" name="lastName" placeholder="Last Name">
            </div> 
        </div>
        
          <div class="mb-4 row">
            <div class="col">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control meri" id="dob" name="dob" placeholder="Date of Birth">
            </div>
        </div> 

        <div class="mb-4">
            <label for="instagram">Instagram</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">Username</span>
                </div>
                <input type="text" class="form-control meri" id="instagram"  name="instagram" placeholder="Instagram">
            </div>
        </div>

        <div class="mb-4">
            <label for="facebook">Facebook</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">Username</span>
                </div>
                <input type="text" class="form-control meri" id="facebook" name="facebook" placeholder="Facebook">
            </div>
        </div>

        <div class="mb-4">
            <label for="username">Twitter</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">Username</span>
                </div>
                <input type="text" class="form-control meri" id="username" name="twitter" placeholder="Twitter" >
            </div>
        </div>

        <div class="mb-4">
            <label for="address">Address</label>
            <input type="text" class="form-control meri" id="address" name="address" placeholder="1234 Main St" >
        </div>

        <div class="mb-4">
            <label for="address">Phone Number</label>
            <input type="text" class="form-control meri" id="address" name="phoneNumber" placeholder="(***) *** ****" >
        </div> 

        <div class="form-group mb-4">
          <label for="exampleInputEmail1">Email Address</label>
          <input type="email" class="form-control meri" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailAddress" placeholder="Enter Email">
        </div>

        <div class="form-group row">
            <div class="col">
                <label for="exampleInputPassword1">Country</label>
                <input type="text" class="form-control meri" id="exampleInputPassword1" name="country" placeholder="Country">
            </div>
            <div class="col">
                <label for="exampleInputPassword1">State / Province / Region*</label>
                <input type="text" class="form-control meri" id="exampleInputPassword1" name="spr" placeholder="State / Province / Region">
            </div>
        </div>

        <div class="form-group row">
            <div class="col">
                <label for="city">City</label>
                <input type="text" class="form-control meri" name="city" id="city" placeholder="City">
            </div>
            <div class="col">
                <label for="exampleInputPassword1">Postal Code/Zip Code</label>
                <input type="text" class="form-control meri" name="postalCode" id="exampleInputPassword1" placeholder="*** ***">
            </div>
        </div>
         
        <div class="form-group row">
            <div class="col">
                  <label for="typeOfRiding">Type of Riding</label>
            <!-- <input type="text" class="form-control meri" name="typeOfRiding" id="typeOfRiding" aria-describedby="emailHelp" placeholder="Motocross, Enduro, Recreational, Trials..."> -->            
            <select class="form-control" id="typeOfRiding" name="typeOfRiding">
                <option value="Motocross">Motocross</option>
                <option value="Enduro">Enduro</option>
                <option value="Recreational">Recreational</option>
            </select>

            </div>
            <div class="col">
                <label for="Class">Class</label>
                <input type="text" class="form-control meri" name="class" id="Class" placeholder="Class">
            </div>
        </div>


        <div class="form-group row">

         <div class="form-group mb-4 col">
            <label for="raceNumber">Race Number</label>
            <input type="text" class="form-control meri" name="raceNumber" id="raceNumber" >
        </div>

        <div class="col">
            <label for="category">Sponsorship Category</label>
            <select class="form-control category" id="category" name="category">
                <option value="recreational">Recreational Rider Program</option>
                <option value="amateurAndIntermediate">Amateur & Intermediate Rider Program</option>
                <option value="Pro">Pro Racer Program</option>
            </select>
        </div>

        <div class="col">
            <label for="jerseySize">Jersey Size</label>
            <select class="form-control" id="jerseySize" name="jerseySize">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="XL">Extra Large</option>
            </select>
        </div>

        </div>

        <div class="form-group row">
            <div class="col">
                <label for="series">What Series Do You Race In?</label>
                <input type="text" class="form-control meri" name="series" id="series" placeholder="">
            </div>
            <div class="col">
                <label for="attendRaces">How Many Races Do You Attend A Year?</label>
                <input type="number" class="form-control meri" name="attendRaces" id="attendRaces" placeholder="">
            </div>
        </div>

        <div class="form-group mb-4">
            <label for="exampleFormControlTextarea1">What would you like us to know about you?</label>
            <textarea class="form-control meri" name="accomplishments" id="accomplishments" rows="7" placeholder=""></textarea>
        </div> 

        <div class="form-group mb-4">
            <label for="exampleFormControlTextarea1">Why would you like to be sponsored?</label>
            <textarea class="form-control meri" name="whyUs" id="exampleFormControlTextarea1" rows="7"></textarea>
        </div>

        
        <div class="form-group mb-4">
            <label for="exampleFormControlTextarea1" >If you are under 18 years of age - please provide your Guardian / Parent's Name and contact information.
</label>
            <textarea class="form-control meri" name="parent" id="parent" rows="7" placeholder="Name, phone number or email address"></textarea>
        </div>

        <div class="form-group mb-4">
            <label for="exampleFormControlFile1 meri">Have a rider resume? Upload below</label>
            <input type="file" class="form-control-file meri"  name="file" id="exampleFormControlFile1">
        </div> 

        <div class="form-group mb-4" style="display:flex;">

            <div class="">
                <label for="exampleFormControlFile1 meri">Rider's Photo</label>
                <input type="file" class="form-control-file meri"  name="photo" id="exampleFormControlFile1">
            </div>

            <figure>
                <img src="<?php echo ROOT_URL; ?>public/images/wesly.JPG" alt="" width="100px" height="100px">
                <figcaption class="meri">Example</figcaption>
            </figure>
            
        </div> 

        <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
        <br>
      </form>

</div>