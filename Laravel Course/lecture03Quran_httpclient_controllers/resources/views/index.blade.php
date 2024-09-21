<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
       body{
            font-family: 'Amiri Quran', serif;
            direction: rtl;
        }
    </style>

</head>

<body>

    <div class="container">


        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Surah Name</th>
                    <th scope="col">Surah Name Meaning</th>
                    <th scope="col">Surah English Name</th>
                    <th scope="col">Verses</th>
                    <th scope="col">RevealationType</th>
                    <th scope="col">ReadSurah
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($collection as $item)

                <tr>

                    <td>{{ $item['number'] }} </td>
                    <td>{{ $item['name'] }} </td>
                    <td>{{ $item['englishNameTranslation'] }} </td>
                    <td>{{ $item['englishName'] }} </td>
                    <td>{{ $item['numberOfAyahs'] }} </td>
                    <td>{{ $item['revelationType'] }} </td>
                    <td><a href="/indexread/{{$item['number']}}" class="btn btn-light">ReadSurah</a></td>


                </tr>

                @endforeach


            </tbody>



        </table>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
