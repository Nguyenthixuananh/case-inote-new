<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="" id="form-edit" method="POST" role="form">
                <div class="modal-header">
                    <h4 class="modal-title">Cập nhật</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" id="id-note" hidden>
                        <input type="text" class="form-control" id="name-edit" placeholder="Nhập vào note">
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <input name="description" type="text" id="description-edit" class="form-control" value="" required="required" placeholder="Nhập mô tả">
                    </div>

                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category" id="category-edit" class="form-control" required="required">
                            <option value="Family">Family</option>
                            <option value="School">School</option>
                            <option value="Company">Company</option>
                            <option value="Learn">Learn</option>
                            <option value="Work">Work</option>
                            <option value="Play">Play</option>
                            <option value="Relax">Relax</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>

                </div>
            </form>
        </div>
    </div>
</div>
