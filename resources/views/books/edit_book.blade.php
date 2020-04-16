@extends('master')

@section('title_header', trans('books/edit_book.title_header'))

@section('main')

<section class="book_section">
    <div class="container ">
        <div class="page_info">
            <h2>{{ trans('books/edit_book.edit_book') }}</h2>
        </div>
        <form method="GET" action="">
            <div class="form-group edit_book">
                <label >{{ trans('books/edit_book.name_book') }}</label>
                <input class="form-control"  placeholder="Name book">
                <label>{{ trans('books/edit_book.upload_image') }}</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                      aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <label >{{ trans('books/edit_book.category') }}</label>
                <input class="form-control" placeholder="Category">
                <label >{{ trans('books/edit_book.page_number') }}</label>
                <input class="form-control" placeholder="Page number">
                <label >{{ trans('books/edit_book.publisher') }}</label>
                <input class="form-control" placeholder="Publisher">
                <label >{{ trans('books/edit_book.author') }}</label>
                <input class="form-control" placeholder="Author">
                <div class="form-group edit_btn">
                    <button class="btn_book_cancel" type="submit" class="btn-primary">{{ trans('books/edit_book.cancel') }}</button>
                    <button class="btn_book_edit" type="submit" class="btn-primary">{{ trans('books/edit_book.add') }}</button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection