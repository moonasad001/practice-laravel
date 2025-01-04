@extends('app')

@section('content')
    <div class="card">
        <div class="card-header">
            Customer Form
        </div>
        <div class="card-body">
            <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="ip_address" value="{{ request()->ip() }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                </div>

                <label class="form-label">Favourite Language</label>
                <div class="mb-3">
                    <input type="radio" id="html" name="favourite_language" value="HTML">
                    <label for="html">HTML</label><br>
                    <input type="radio" id="css" name="favourite_language" value="CSS">
                    <label for="css">CSS</label><br>
                    <input type="radio" id="javascript" name="favourite_language" value="JavaScript">
                    <label for="javascript">JavaScript</label><br>
                    <input type="radio" id="php" name="favourite_language" value="PHP">
                    <label for="php">PHP</label>
                </div>
                <label for="birthdate">Birth Date:</label>
                <input type="date" id="birthdate" name="birthdate">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
