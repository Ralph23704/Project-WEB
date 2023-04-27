@extends('layouts.app')
@section('content')
    @vite(['resources/js/app.js'])
<div class="container">
    <div class="row">
        <h1>ADD NEW ACTIVITY</h1>
    </div>
    <div class="row">
        <div class="col-8">
            <form method="POST">
                <div class="mb-3">
                    <label for="text" class="form-label">Activity Name</label>
                    <input type="text" class="form-control" id="text" name="text" aria-describedby="text-help">
                    <div id="text-help" class="form-text">Nous ne revendrons pas votre email.</div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Description</label>
                    <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">UPLOAD AN IMAGE</label>
                    <input type="file" class="form-control" id="image" name="image" aria-describedby="text-help">
                    <div id="text-help" class="form-text">Nous ne revendrons pas votre email.</div>
                </div>
                <button type="submit">DONE</button>
            </form>
        </div>

        <div class="col-4">
            <img src="" alt="not filed added Yet">
        </div>
    </div>
</div>
@endsection
