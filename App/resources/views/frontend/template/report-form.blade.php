
<!-- Modal -->
<div class="modal fade" id="report-form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tố cáo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="">Nêu lý do</div>
          <textarea name="" id="reasondata" class="resize-none w-100"></textarea>
          <div class="" id="reportWarning" style="display: none">
            <div class="text-danger">
              Vui lòng nêu lý do.
            </div>
          </div>
          <div class="" id="reportSuccess" style="display: none">
            <div class="text-success">
              Tố cáo đã được gửi.
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-primary border-dark" id="drop-report" data-bs-dismiss="modal">Bỏ</button>
          <button type="button" class="btn btn-info" id="send-report">Gửi</button>
        </div>
      </div>
    </div>
</div>