<table>
              <thead>
                  <tr>
                  
                      <th>Id </th> 
                      <th>Id buku </th>
                      <th>Judul Buku</th>
                      
                      <th>Jenis Buku</th>
                      <th>Tahun Terbit</th>
                     
                     
                  </tr>
              </thead>
              <tbody>
                
                  @foreach ($home as $Home)
                  <tr>
                      
                      <td>{{ $Home->id_buku }}</td>
                      
                      <td>{{ $Home->id_jenis}}</td>
                      <td>{{ $Home->judul }}</td>
                      <td>{{ $Home->jenis }}</td>
                      <td>{{ $Home->tahun_terbit }}</td>

                    
                      
                  </tr>
                @endforeach
              </tbody>
          </table>
