    <div class="banner--top">
        <h1 class="heading">contact</h1>
    </div>    
    
    <form class="container" method="POST">                                
        <div class="mb-4">
            <label for="name">Name</label>
            <input type="text" class="form-control meri" id="name" name="name" placeholder="Name" required>
        </div>
                
        <div class="form-group mb-4">
            <label for="email">Email address</label>
            <input type="email" class="form-control meri" id="email" name="email" placeholder="Email">
        </div>
                        
        <div class="form-group mb-4">
            <label for="subject">Subject</label>
            <input type="text" class="form-control meri" id="subject" name="subject" placeholder="Subject">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control meri" id="message" name="message" rows="7"></textarea>
        </div>
                
        <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
        <br>
    </form>