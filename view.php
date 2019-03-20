<h1 class=" text-center text-success">
<?php
if($this->session->flashdata('msg'))
echo $this->session->flashdata('msg');
?>
</h1>


<div class="col-md-6 ml-md-auto" >

<?php echo form_open_multipart('save-free-course');?>
<div class="form-group">
  <label for="">Course Name</label>
  <input type="text" name="title" id="" class="form-control" placeholder="Course Title" aria-describedby="helpId" required>
</div>
<div class="form-group">
  <label for="">Course Description</label>
  <input type="text" name="des" id="" class="form-control" placeholder="Course Description" aria-describedby="helpId" required>
</div>
<div class="form-group">
  <label for="">Course Link (youtube..etc)</label>
  <input type="text" name="youtube_link" id="" class="form-control" placeholder="Course Link" aria-describedby="helpId" required>
</div>
<div class="form-group">
  <label for="">Course Image</label>
  <input type="file" name="image" id="" class="form-control" placeholder="Course Link" aria-describedby="helpId">
</div>
<div class="form-group">
  <label for="">Course Status</label>
  
  <div class="form-check">
      <label class="form-check-label">
      <input type="radio" class="form-check-input"  name="publish" id="" value="1" checked> Publish
    </label>
    <label class="form-check-label">
      <input type="radio" class="form-check-input"  name="publish" id="" value="0"> Not Publish
    </label>
  </div>
  
</div>


<button type="submit" class="btn btn-primary">Add Free Course</button>
</form>
</div>