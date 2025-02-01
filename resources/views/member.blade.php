<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecnospace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT3bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <x-navbar />  

    <div class="container mt-5">
        <form action="/LeadNonBin/create" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            @csrf

            <div class="mb-3">
                <label for="FullName3" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="FullName3" id="FullName3" value="{{ old('FullName3') }}" required>
                @error('FullName3')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Email3" class="form-label">Email</label>
                <input type="email" class="form-control" name="Email3" id="Email3" value="{{ old('Email3') }}" required>
                @error('Email3')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="WA3" class="form-label">WhatsApp</label>
                <input type="text" class="form-control" name="WA3" id="WA3" value="{{ old('WA3') }}" required>
                @error('WA3')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Line3" class="form-label">Line ID</label>
                <input type="text" class="form-control" name="Line3" id="Line3" value="{{ old('Line3') }}" required>
                @error('Line3')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Github3" class="form-label">Github Username</label>
                <input type="text" class="form-control" name="Github3" id="Github3" value="{{ old('Github3') }}" required>
                @error('Github3')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="BirthPlace3" class="form-label">Birth Place</label>
                <input type="text" class="form-control" name="BirthPlace3" id="BirthPlace3" value="{{ old('BirthPlace3') }}" required>
                @error('BirthPlace3')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Birthdate3" class="form-label">Birthdate</label>
                <input type="date" class="form-control" name="Birthdate3" id="Birthdate3" value="{{ old('Birthdate3') }}" required>
                @error('Birthdate3')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="CV3" class="form-label">Upload CV (PDF, DOC, DOCX, PNG)</label>
                <input type="file" class="form-control" name="CV3" id="CV3" accept=".pdf,.doc,.docx,.png" required>
                @error('CV3')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="IDCard3" class="form-label">Upload ID Card (Image, PNG)</label>
                <input type="file" class="form-control" name="IDCard3" id="IDCard3" accept="image/*,.png" required>
                @error('IDCard3')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>   

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
