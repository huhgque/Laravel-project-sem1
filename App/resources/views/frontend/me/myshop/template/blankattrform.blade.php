
<div class="version" id="version_{{$form}}">
    <div class="row">
      <div class="col-md-12">
        <div class="mb-3">
          <label>Thuộc tính</label>
          <div class="input-group mb-3">
            
            <input
            type="text"
            name="attr_label[]"
            class="form-control"
            placeholder="Vị dụ(Màu)"
            aria-label="price"
            aria-describedby="basic-addon1"
            />
          </div>
        </div>
      </div>
      
    </div>
        
    <div class="table-responsive">
      <table class="table table-bordered td-padding">
        <tbody id="attr-holder-{{$form}}">
          <tr class="attr-group" index="0">
            <td width="40%">
              <input
              type="text"
              name="attr_name[{{$form}}][]"
              class="form-control"
              placeholder="Giá trị thuộc tính (Đỏ)"
              />
            </td>
            <td width="40%">
              <input
              type="text"
              name="attr_val[{{$form}}][]"
              class="form-control"
              placeholder="Mức tăng giá"
              />
            </td>
            <td width="20%">
              <input
              type="number"
              min="1"
              name="stock[{{$form}}][]"
              class="form-control"
              placeholder="Kho"
              aria-label="price"
              aria-describedby="basic-addon1"
              />
            </td>
            <td width="20%">
              <button type="button" class="btn attr_row_remove text-danger" row_id="0" attr_id="{{$form}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="d-flex justify-content-center">

        <button type="button" attr_target="{{$form}}" class="add_more_attr btn btn-info rounded-pill col-3 d-block">Thêm giá trị thuộc tính</button>
        <button type="button" attr_target="{{$form}}" class="delete_attr btn btn-danger rounded-pill col-3 d-block">Xóa cấu hình</button>
      </div>
    </div>
    
  </div>