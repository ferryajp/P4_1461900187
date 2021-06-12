<head>
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home0187">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="buku0187">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jenisbuku">Jenis Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="rakbuku0187" tabindex="-1" >Rak Buku</a>
        </li>
      </ul>
        </nav>
<body>
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                  
                      <th>Id buku</th> 
                      <th>Jenis Buku</th>
                      
                      
                     
                    
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($jenisbuku as $Jenis)
                  <tr>
                      
                      <td>{{ $Jenis->id }}</td>
                      <td>{{ $Jenis->jenis}}</td>
                      
                      
                    

                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>