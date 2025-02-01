<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tecnospace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT4bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <x-navbar />  

    <div class="container mt-5">
        <form action="/LeadNonBin/create" method="POST" enctype="multipart/form-data" class="p-4 border rounded">
            @csrf

            <div class="mb-3">
                <label for="FullName4" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="FullName4" id="FullName4" value="{{ old('FullName4') }}" required>
                @error('FullName4')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Email4" class="form-label">Email</label>
                <input type="email" class="form-control" name="Email4" id="Email4" value="{{ old('Email4') }}" required>
                @error('Email4')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="WA4" class="form-label">WhatsApp</label>
                <input type="text" class="form-control" name="WA4" id="WA4" value="{{ old('WA4') }}" required>
                @error('WA4')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Line4" class="form-label">Line ID</label>
                <input type="text" class="form-control" name="Line4" id="Line4" value="{{ old('Line4') }}" required>
                @error('Line4')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Github4" class="form-label">Github Username</label>
                <input type="text" class="form-control" name="Github4" id="Github4" value="{{ old('Github4') }}" required>
                @error('Github4')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="BirthPlace4" class="form-label">Birth Place</label>
                <input type="text" class="form-control" name="BirthPlace4" id="BirthPlace4" value="{{ old('BirthPlace4') }}" required>
                @error('BirthPlace4')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Birthdate4" class="form-label">Birthdate</label>
                <input type="date" class="form-control" name="Birthdate4" id="Birthdate4" value="{{ old('Birthdate4') }}" required>
                @error('Birthdate4')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="CV4" class="form-label">Upload CV (PDF, DOC, DOCX, PNG)</label>
                <input type="file" class="form-control" name="CV4" id="CV4" accept=".pdf,.doc,.docx,.png" required>
                @error('CV4')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="IDCard4" class="form-label">Upload ID Card (Image, PNG)</label>
                <input type="file" class="form-control" name="IDCard4" id="IDCard4" accept="image/*,.png" required>
                @error('IDCard4')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>   

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
