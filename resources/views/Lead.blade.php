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

      <form action="/Lead-Information/create" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="left-wrapper">
            <div class="full-name">
                <h1 class="lead-information-text">Full Name</h1>
                <input class="left-lead-information-box" type="text" name="FullName" placeholder="Your name" id="FullName" value="{{ old('FullName') }}" required>
                @error('FullName')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="Email">
                <h1 class="lead-information-text">Email</h1>
                <input class="left-lead-information-box" type="email" name="Email" placeholder="Your email" id="Email" value="{{ old('Email') }}" required>
                @error('Email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="WA">
                <h1 class="lead-information-text">WA</h1>
                <input class="left-lead-information-box" type="text" name="WA" placeholder="Your Whatsapp number" id="WA" value="{{ old('WA') }}" required>
                @error('WA')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="Line">
                <h1 class="lead-information-text">Line</h1>
                <input class="left-lead-information-box" type="text" name="Line" placeholder="Your Line ID" id="Line" value="{{ old('Line') }}" required>
                @error('Line')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="Github">
                <h1 class="lead-information-text">Github</h1>
                <input class="left-lead-information-box" type="text" name="Github" placeholder="Your Github / Gitlab ID" id="Github" value="{{ old('Github') }}" required>
                @error('Github')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="BirthPlace">
                <h1 class="lead-information-text">BirthPlace</h1>
                <input class="left-lead-information-box" type="text" name="BirthPlace" placeholder="Your BirthPlace ID" id="BirthPlace" value="{{ old('BirthPlace') }}" required>
                @error('BirthPlace')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="Birthdate">
                <h1 class="lead-information-text">Birthdate</h1>
                <input class="left-lead-information-box" type="date" name="Birthdate" placeholder="Your Birthdate" id="Birthdate" value="{{ old('Birthdate') }}" required>
                @error('Birthdate')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="CV">
                <h1 class="lead-information-text">Upload CV</h1>
                <input class="left-lead-information-box" type="file" name="CV" id="CV" required>
                @error('CV')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>     
            
            <div class="FlazzCard">
                <h1 class="lead-information-text">FlazzCard</h1>
                <input class="left-lead-information-box" type="file" name="FlazzCard" id="FlazzCard" required>
                @error('FlazzCard')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>   

                <button class="submit-contact-us" type="submit" id="submit-contact">Submit</button>
            </div>

        </div>
      </div>
      </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>