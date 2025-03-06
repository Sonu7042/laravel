<div>
    <h1>Upload File</h1>
    <form action="uploadFile" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" value="">
        <button>Upload File</button>

    </form>
</div>