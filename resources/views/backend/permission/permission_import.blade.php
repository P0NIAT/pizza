@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('export') }}" class="btn btn-inverse-info">Export Xlsx</a> &nbsp;&nbsp;
        </ol>
    </nav>
    <div class="row profile-body">
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
          <div class="card">
             <div class="card-body">
                 <h6 class="card-title">Import Permissions</h6>

                 <form method="POST" action="{{ route('import') }}" id="myForm" enctype="multipart/form-data" class="forms-sample">
                     @csrf

                     <div class="form-group mb-3">
                         <label for="name" class="form-label">Xlsx File Import</label>
                         <input name="import_file" type="file" class="form-control import_file">
                     </div>

                     <button type="submit" class="btn btn-inverse-warning xlsx_file me-2" id="xlsx_file">Upload</button>
                 </form>
             </div>
           </div>
        </div>
      </div>
    </div>
</div>

<script>
const submitBtn = document.getElementById('xlsx_file');
const importInput = document.querySelector('.import_file');

const handleImportInput = () => {
    const file = importInput.files[0];
    let fileExtension;
    if (file) {
        const fileName = file.name;
        fileExtension = fileName.split('.').pop();
        }

    if (fileExtension === 'xlsx') {
        submitBtn.classList.remove('xlsx_file');
    } else {
        event.preventDefault();
        submitBtn.classList.add('xlsx_file');
    }
}

importInput.addEventListener('change', () => handleImportInput());

</script>

@endsection

