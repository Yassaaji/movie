<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ticket Booking</title>
    <!--Google Fonts and Icons-->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

    <form action="{{ route('pesanan.store') }}" method="post" enctype="multipart/form-data">

        @csrf


<!-- Bagian kiri form -->
<div class="left-form">
 <div class="col-md-6">

    <div class="center">
      <div class="tickets" style="max-width: 550px; max-height: 96vh;">
        <div class="ticket-selector">
         <div class="head">

   <img src="{{ asset('img/logo.png') }}" width="25px">

    <div class="title">ovie Flix</div>
</div>
<h3>ROOM XI</h3>

          <div class="seats">
            <div class="status">
              <div class="item">Tersedia</div>
              <div class="item">Pesanan</div>
              <div class="item">Pilihan</div>
            </div>
            <div class="all-seats">

              @forelse ($kursi as $data)
              <input type="checkbox" name="tickets[]" value="{{ $data->nomor_kursi }}" id="{{ $data->nomor_kursi }}" onchange="updateSelectedSeats(this)" />
              <label for="{{ $data->nomor_kursi }}" class="seat booked">{{ $data->nomor_kursi }}</label>
          @empty
              {{-- <td id="daftarkursi">
                  <ul id="selected-seats"></ul>
              </td> --}}
              <p>Kursi Tidak Tersedia</p>
          @endforelse
            </div>
          </div>

        </div>
        </div>
      </div>
    </div>
</div>

</div><!-- Bagian kanan form -->
<div class="right-form">

    <table class="table table-success table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th scope="col">Ruangan</th>
                <th scope="col">Jam</th>
                <th scope="col">Harga Tiket</th>
                <th scope="col">Seat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{ $ticket->ruangan->nama_ruangan }}</th>
                <td>{{ date('H:i', strtotime($ticket->jam_tayang)) }}</td>
                <td>
                  <div class="price">
        <div class="total">
            <span>Total   <span class="count">0</span></span>
            <p class="amount">0</p>
            {{-- <input id="totalHarga" type="hidden" name="totalHarga" value="">
            <input id="kursiPilihan" type="hidden" name="kursiPilihan" value="kursiPilihan[]"> --}}
        </div>
                </td>
                <td id="daftarkursi">
                  <ol id="selected-seats"></ol>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Jarak antara tabel dan dropdown -->
    <div class="spacing"></div>

  <div class="payment-method">
    <label for="payment">Metode Pembayaran:</label>
    <select id="payment" name="payment" required>
        <option value="">Pilih</option> <!-- Opsi default -->
        <option value="credit_card">Kartu Kredit</option>
        <option value="debit_card">Kartu Debit</option>
        <option value="paypal">PayPal</option>
        <option value="cash">Tunai</option>
    </select>
</div>
<label for="Bukti">Bukti Pembayaran</label>
<input class="form-control-file" type="file" name="bukti_pembayaran" id="Bukti">
<button type="submit" class="input-submit" style="width: 90%;">Upload</button>

    <center>


 {{-- <div class="price">
        <div class="total">
            <span>Total   <span class="count">0</span></span>
            <div class="amount">0</div>
        </div>

    </div> --}}
</center>
        </div>

    </form>
        <script>
            let seats = document.querySelector(".all-seats");
            // let daftarkursi = document.getElementById('daftarKursi');
    //   for (var i = 0; i < 59; i++) {
    //     let randint = Math.floor(Math.random() * 2);
    //     let booked = randint === 1 ? "booked" : "";
    //     seats.insertAdjacentHTML(
    //       "beforeend",
    //       '<input type="checkbox" name="tickets" id="s' +
    //         (i + 2) +
    //         '" /><label for="s' +
    //         (i + 2) +
    //         '" class="seat ' +
    //         booked +
    //         '"></label>'
    //     );
    //   }

      let tickets = seats.querySelectorAll("input");
      tickets.forEach((ticket) => {
        ticket.addEventListener("change", () => {
          let daftarkursi = document.querySelectorAll('#daftarkursi').innerHTML;
          let amount = document.querySelector(".amount").innerHTML;
          let count = document.querySelector(".count").innerHTML;
          amount = Number(amount);
          count = Number(count);

          if (ticket.checked) {

            count += 1;
            amount += {{ $ticket->harga }};
            daftarkursi = ticket.harga
          } else {

            count -= 1;
            amount -= {{ $ticket->harga }};
            daftarkursi = ''
          }
          document.querySelector(".amount").innerHTML = amount;
          document.querySelector(".count").innerHTML = count;
          document.getElementById('totalHarga').value = amount;

        });
      });



    //   var xhr =

                let daftarKursi = []

                function updateSelectedSeats(checkbox) {
                    var selectedSeatsList = document.getElementById('selected-seats');

                    if (checkbox.checked) {
                        // Checkbox dipilih, tambahkan nilai (value) checkbox ke daftar kursi yang dipilih
                        var seatNumber = document.createTextNode(checkbox.value);
                        var listItem = document.createElement('li');
                        daftarKursi.push(checkbox.value)
                        listItem.appendChild(seatNumber);
                        selectedSeatsList.appendChild(listItem);
                    } else {
                        // Checkbox tidak dipilih, hapus nilai (value) checkbox dari daftar kursi yang dipilih
                        var selectedSeats = selectedSeatsList.getElementsByTagName('li');
                        for (var i = 0; i < selectedSeats.length; i++) {
                            if (selectedSeats[i].textContent === checkbox.value) {
                                selectedSeatsList.removeChild(selectedSeats[i]);
                                break;
                            }
                        }
                    }

                    // document.getElementById('kursiPilihan').value = daftarKursi;
                }

            </script>
  </body>
</html>
