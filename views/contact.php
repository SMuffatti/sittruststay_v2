<?php include 'partials/header.php'; ?>

<div class="container-fluid contact-page">
  <div class="container contact-page-container">
    <div class="row contact-form">
      <form class="col-md-6 col-md-offset-3">
        <div class="form-group">
          <label for="name">Name</label>
          <input required type="name" class="form-control" placeholder="Your Name Here">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input required type="email" class="form-control" placeholder="i_<3_puppies@email.com">
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="location" class="form-control" placeholder="City, State">
        </div>
        <div class="form-group">
          <label for="dog">Dog Name(s)</label>
          <input type="dog" class="form-control" placeholder="Karl Barx">
        </div>
        <div class="form-group">
          <label for="reason">Your Dog Training Needs</label>
          <textarea required type="reason" class="form-control" rows="7" placeholder="Please describe your training needs."></textarea>
        </div>
        <button class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php include 'partials/footer.php'; ?>
