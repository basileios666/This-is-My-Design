<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>HTML Table</h2>
 @foreach ($posts as $post )
    <table>
        <tr>
            <th>{{$post['Title']}}</th>
            <th>{{$post['Owner']}}</th>
            <th>{{$post['created date']}}</th>
        </tr>
        @endforeach
    </table>

</body>

</html>
