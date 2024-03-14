<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cardex Institucional</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background: #004D7A; /* Color institucional, puede variar */
            padding: 20px;
            text-align: center;
            color: #fff;
        }
        .header img {
            max-width: 100px; /* Tamaño reducido para ser más formal */
            height: auto;
        }
        .content {
            padding: 20px;
            text-align: left;
        }
        .content h1, .content h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #004D7A;
            color: white;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background: #004D7A;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            {{-- <img src="img/logo_ut.jpg" alt="Logo Institucional"> --}}
            <h1>Cardex Estudiantil</h1>
        </div>
        <div class="content">
            <h1>Información del Estudiante</h1>
            <p><strong>Nombre:</strong> {{ $student->name_student }} {{ $student->lastname_student }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $student->email_student }}</p>
            <p><strong>Fecha de Nacimiento:</strong> {{ $student->birthday }}</p>

            <h2>Asignaturas</h2>
            <table>
                <thead>
                    <tr>
                        <th>Asignatura</th>
                        <th>Descripción</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $subject->objective }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h2>Actividades</h2>
            <table>
                <thead>
                    <tr>
                        <th>Actividad</th>
                        {{-- <th>Descripción</th>
                        <th>Calificación</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($activities as $activity)
                        <tr>
                            <td>{{ $activity->activity_name }}</td>
                            {{-- <td>{{ $activity->description }}</td>
                            <td>{{ $activity->grade }}</td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer">
            Universidad Tecnológica - Derechos Reservados
        </div>
    </div>
</body>
</html>
