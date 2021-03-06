<div class="modal" tabindex="-1" id="delete_project" action="delete_project_process.php">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Project Deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../modals/delete_project_process.php" method="POST">
        <div class="modal-body">
          <input type="hidden" name="proj_id" id="delete_id">
          <p>Are you sure you want to delete this project?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="delete_project">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>