<!-- Main Content -->
<form class="" method="post">
  <div class="d-flex gap-2">
    <div class="mb-3 col-4">
      <label class="form-label">Full Name</label>
      <input type="text" class="form-control" name="student_name" placeholder="Enter full name" required>
    </div>
    <div class="mb-3 col-4">
      <label class="form-label">phone_number</label>
      <input type="text" class="form-control" name="phone_number" placeholder="Enter full phone phone_number" required>
    </div>
    <div class="mb-3 col-4">
      <label class="form-label">Gender</label>
      <select class="form-select" name="gender" required>
        <option value="" disabled selected>Select gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
  </div>

  <div class="d-flex justify-content-end gap-2">
    <a href="index.php" class="btn btn-secondary">Cancel</a>
    <button type="submit" class="btn btn-success">Update</button>
  </div>
</form>