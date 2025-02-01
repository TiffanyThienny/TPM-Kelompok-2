<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecnospace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <x-navbar />  

    <div class="container mt-5">
        <form action="/LeadNonBin/create" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            @csrf

            <div class="mb-3">
                <label for="FullName2" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="FullName2" id="FullName2" value="{{ old('FullName2') }}" required>
                @error('FullName2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Email2" class="form-label">Email</label>
                <input type="email" class="form-control" name="Email2" id="Email2" value="{{ old('Email2') }}" required>
                @error('Email2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="WA2" class="form-label">WhatsApp</label>
                <input type="text" class="form-control" name="WA2" id="WA2" value="{{ old('WA2') }}" required>
                @error('WA2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Line2" class="form-label">Line ID</label>
                <input type="text" class="form-control" name="Line2" id="Line2" value="{{ old('Line2') }}" required>
                @error('Line2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Github2" class="form-label">Github Username</label>
                <input type="text" class="form-control" name="Github2" id="Github2" value="{{ old('Github2') }}" required>
                @error('Github2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="BirthPlace2" class="form-label">Birth Place</label>
                <input type="text" class="form-control" name="BirthPlace2" id="BirthPlace2" value="{{ old('BirthPlace2') }}" required>
                @error('BirthPlace2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Birthdate2" class="form-label">Birthdate</label>
                <input type="date" class="form-control" name="Birthdate2" id="Birthdate2" value="{{ old('Birthdate2') }}" required>
                @error('Birthdate2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="CV2" class="form-label">Upload CV (PDF, DOC, DOCX, PNG)</label>
                <input type="file" class="form-control" name="CV2" id="CV2" accept=".pdf,.doc,.docx,.png" required>
                @error('CV2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="IDCard2" class="form-label">Upload ID Card (Image, PNG)</label>
                <input type="file" class="form-control" name="IDCard2" id="IDCard2" accept="image/*,.png" required>
                @error('IDCard2')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>   

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
