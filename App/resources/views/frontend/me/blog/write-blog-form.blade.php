<form method="POST" action="/me/blog" class="modal fade" id="blog-write" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" enctype="multipart/form-data"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    @csrf
    <input type="text" id="editing-blog-id" hidden name="id" value="">
    <div class="modal-dialog">
        <textarea name="blog-content" hidden id="content-data"></textarea>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Write blog</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="content" id="blog-content">
                    {{-- <textarea name=""  class="resize-none w-100" style="height: 200px"></textarea> --}}
                </div>
                <div class="col-md-12">
                    <h5 class="card-title mt-3">Upload Image</h5>
                    
                    <div class="btn btn-info waves-effect waves-light">
                      <span>Upload Image</span>
                      <input type="file" multiple id="image_selector" name="blog-image[]" class="upload" />
                    </div>
                    <div class="image_holder row p-3">
                        
                      
                    </div>  
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"  id="post-blog">Post</button>
            </div>
        </div>
    </div>
</form>
