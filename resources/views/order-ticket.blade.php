

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pesan Tiket</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

  </head>

  <style>
    .list-bank{
        padding: 5px;
        border: 1px solid black;
    }

    .list-bank img{
        width: 50%;
        margin: 0 auto;
    }

    .left-form{
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgb(2, 2, 2);

    }

    .rigth-form{
        height: 100vh;
        max-height: 100vh;
    background-color: rgb(2, 2, 2);
    overflow-y: scroll;

}
    .payment-method{
        height: auto;
    }

    form{
        display: flex;
        flex-direction: row;
        height: 100vh;
        max-height: 100vh;
        overflow: hidden;
    }
    .table{
        background-color: rgb(211, 207, 200);

    }
    .data{
        color: white;
    }
    .table-title {
    display: flex;
    align-items: center;
     justify-content: space-between;
    margin-bottom: 20px;
    padding: 10px 0;
}


h2 {
    font-size: 24px; /* Sesuaikan ukuran font judul */
    margin: 0;
}
    .title {
        margin-bottom: 20px; /* Menambahkan jarak bawah 20px */
    }

    h3 {
        margin-bottom: 40px; /* Menambahkan jarak bawah 40px */
    }

  </style>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('error'))
    <script>
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: '{{ session('error') }}',
})
    // alert("{{ session('error') }}")
    </script>
    @endif
    @if (session('success'))
    <script>
Swal.fire({
  icon: 'success',
  title: 'Berhasil',
  text: '{{ session('success') }}',
})
    // alert("{{ session('error') }}")
    </script>
    @endif

    <form action="{{ route('create-pesanan',$film->id) }}" method="post" enctype="multipart/form-data">

        @csrf

<!-- Bagian kiri form -->
<div class="left-form">
 <div class="col-md-6">



    <div class="title text-center"><img src="{{ asset('img/LOGO.png') }}" width="55px"><h3 class="movie-flix fs-4 text-white">Movie<span style="color: #0007AC;">Flix</span></h3>
</div>

<h3 class="text-center fw-bold mb-5">STUDIO {{ $film->ruangan->nama_ruangan }}</h3>

          <div class="seats">
            <div class="status">
              <div class="item">Tersedia</div>
              <div class="item">Pesanan</div>
              <div class="item">Pilihan</div>
            </div>
            <div class="all-seats">
              @forelse ($kursi as $i => $data)

              {{-- @dd($data) --}}

              <input @foreach ( $status_kursi as $status )
              @if (($data->nomor_kursi === ($status->nomor_kursi) ))
              disabled
            @endif
              @endforeach type="checkbox" name="tickets[]" value="{{ $data->nomor_kursi }}" id="{{ $data->nomor_kursi }}" onchange="updateSelectedSeats(this)" />
              <label

              class="seat booked"

               for="{{ $data->nomor_kursi }}">{{ $data->nomor_kursi }} </label>
                @if ($i === 3)
                    <br>
                @endif
                @if ($i === 11)
                    <br>
                @endif
                @if ($i === 19)
                    <br>
                @endif
          @empty
              {{--\ <td id="daftarkursi">
                  <ul id="selected-seats"></ul>
              </td> --}}
              <p>Kursi Tidak Tersedia</p>
          @endforelse
            </div>
          </div>
    </div>
</div>

{{-- </div><!-- Bagian kanan form --> --}}
<div class="right-form">
     <div class="table-title">
        <div class="title text-center">
    <img src="{{ asset('img/LOGO.png') }}" width="35px">
    <span class="movie-flix fs-4 text-black">Movie<span style="color: #0007AC;">Flix</span>
</div>


    </div>
    <table class="table table-dark table-striped overflow-y-scroll" style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.836);">
        <thead>
    <tr>
    <th scope="col" style="color: black;"><i class="fas fa-film"></i> Studio</th>
    <th scope="col" style="color: black;"><i class="far fa-clock"></i> Jam</th>
    <th scope="col" style="color: black;"><i class="fas fa-ticket-alt"></i> Harga Tiket</th>
    <th scope="col" style="color: black;"><i class="fas fa-chair"></i> Kursi</th>
</tr>

        </thead>

        <div class="data">
        <tbody>
            <tr>
                <th>{{ $film->ruangan->nama_ruangan }}</th>
                <td>{{ date('H:i', strtotime($film->jam_tayang)) }}</td>
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
     </div>

    </table>

    <!-- Jarak antara tabel dan dropdown -->
    <div class="spacing"></div>

    @error('payment')
      <script>
        Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: '{{ $message }}',
  footer: '<a href="">Why do I have this issue?</a>'
})
      </script>
    @enderror


  <div class="payment-method d-flex flex-column justify-content-between">
    <label for="payment">Metode Pembayaran:
   <select id="payment" name="payment" required>
            <option>Pilih</option> <!-- Opsi default -->
            <option value="atm">Kartu Atm 🏧</option> <!-- Add an ATM icon -->
            <option value="ewallet">Ewallet 💳</option> <!-- Add an E-wallet icon -->
            <option value="cash">Tunai 💵</option> <!-- Add a Cash icon -->
        </select>
    <div id="container-payment">

    </div>
</label>
    <button type="submit" class=" btn btn-dark input-submit mb-5"  style="">Submit</button>
</div>
{{-- <button type="submit" class="input-submit" style="width: 90%;">Submit</button> --}}

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
            amount += {{ $film->harga }};
            daftarkursi = ticket.harga
          } else {

            count -= 1;

            amount -= {{ $film->harga }};

            daftarkursi = ''
          }

          if(amount < 0 && count < 0){
               amount = 0;
               count = 0;
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

                function  showPaymentContent(metode){
                   const PaymentAtmBody = document.getElementById('paymentAtmBody');
                    PaymentAtmBody.innerHTML = ""
                    if(metode === "bri"){
                     PaymentAtmBody.innerHTML = `
    <h3>
    <img src="{{ asset('img/bank/bri.png') }}" alt="BRI Logo" style="width: 70px; height: auto; vertical-align: middle; margin-right: 10px;">
    <span style="display: inline-block; vertical-align: middle;"></span>
</h3>

<h2><p>{{ $bank[0]->bank }} {{ $bank[0]->nomor_rekening }}</p>
</h2>

                            <label for="Bukti">Bukti Pembayaran</label>
                            <input value="{{ $bank[0]->id }}" name='bankid'  type="hidden" />
                            <input class="form-control-file" type="file" name="bukti_pembayaran" id="Bukti">
                        </div>
                     `
                    }
                    if(metode === "bca"){
                     PaymentAtmBody.innerHTML = `
   <h3>
    <img src="{{ asset('img/bank/bca.png') }}" alt="BRI Logo" style="width: 70px; height: auto; vertical-align: middle; margin-right: 10px;">
    <span style="display: inline-block; vertical-align: middle;"></span>
</h3>

<h2><p>{{ $bank[1]->bank }} {{ $bank[1]->nomor_rekening }}</p>
</h2>
                           
                            <input value="{{ $bank[1]->id }}" name='bankid'  type="hidden" />
                            <input class="form-control-file" type="file" name="bukti_pembayaran" id="Bukti">
                        </div>
                     `
                    }
                    if(metode === "mandiri"){
                     PaymentAtmBody.innerHTML = `
                     
                    <div>
  <h3>
    <img src="{{ asset('img/bank/mandiri.png') }}" alt="BRI Logo" style="width: 70px; height: auto; vertical-align: middle; margin-right: 10px;">
    <span style="display: inline-block; vertical-align: middle;"></span>
</h3>

       <h2><p>{{ $bank[2]->bank }} {{ $bank[2]->nomor_rekening }}</p></h2>
    <label for="Bukti">Bukti Pembayaran</label>
    <input value="{{ $bank[2]->id }}" name='bankid'  type="hidden" />
    <input class="form-control-file" type="file" name="bukti_pembayaran" id="Bukti">
</div>

                     `
                    }
                    if(metode === "dana"){
                     PaymentAtmBody.innerHTML = `
                     <div class="container">
    <div class="card">
        <div class="card-body">
       <h3>
    <img src="{{ asset('img/bank/dana.png') }}" alt="DANA Logo" style="width: 70px; height: auto; vertical-align: middle; margin-right: 10px;">
    <span style="display: inline-block; vertical-align: middle;"></span>
</h3>

            <div class="text-center">
                <img width="300" height="300" class="img-thumbnail" src="{{ asset('storage/qrcode/' . $ewallets[0]->qrcode) }}" alt="QR Code" />
            </div>
            <br>
            <label for="Bukti">Bukti Pembayaran</label>
            <input value="{{ $ewallets[0]->id }}" name="ewalletId" type="hidden" />
            <input class="form-control-file" type="file" name="bukti_pembayaran" id="Bukti">
        </div>
    </div>
</div>
                     `
                    }

                    if(metode === "paypal"){
                     PaymentAtmBody.innerHTML = `
                     <div class="container">
    <div class="card">
        <div class="card-body">
    <h2>
    <img src="{{ asset('img/bank/paypal2.png') }}" alt="BRI Logo" style="width: 70px; height: auto; vertical-align: middle; margin-right: 10px;">
    <span style="display: inline-block; vertical-align: middle;"></span>
</h2>            <div class="text-center">
                <img width="300" height="300" class="img-thumbnail" src="{{ asset('storage/qrcode/' . $ewallets[1]->qrcode) }}" alt="QR Code" />
            </div>
            <br>
            <label for="Bukti">Bukti Pembayaran</label>
            <input value="{{ $ewallets[1]->id }}" name="ewalletId" type="hidden" />
            <input class="form-control-file" type="file" name="bukti_pembayaran" id="Bukti">
        </div>
    </div>
</div>
                     `
                    }

                    if(metode === "gopay"){
                     PaymentAtmBody.innerHTML = `
                     <div class="container">
    <div class="card">
        <div class="card-body">
 <h2>
    <img src="{{ asset('img/bank/gopay.png') }}" alt="BRI Logo" style="width: 70px; height: auto; vertical-align: middle; margin-right: 10px;">
    <span style="display: inline-block; vertical-align: middle;"></span>
</h2>            <div class="text-center">
                <img width="300" height="300" class="img-thumbnail" src="{{ asset('storage/qrcode/' . $ewallets[2]->qrcode) }}" alt="QR Code" />
            </div>
            <br>
            <label for="Bukti">Bukti Pembayaran</label>
            <input value="{{ $ewallets[2]->id }}" name="ewalletId" type="hidden" />
            <input class="form-control-file" type="file" name="bukti_pembayaran" id="Bukti">
        </div>
    </div>
</div>
                     `
                    }


                }


                const containerPayment = document.getElementById('container-payment')
                const payment = document.getElementById('payment')

                // console.log(bank);
                    let Atm = `
                    <div class="card">
                        <div class="card-body">
                            <select onchange="showPaymentContent(this.value)" >
                              <option disabled selected >Pilih Jenis Bank</option>
                              @foreach ( $bank as $data )
                                <option name="jenisBank" value="{{ $data->bank }}">{{  strtoupper($data->bank) }}</option>
                              @endforeach
                            </select>
                            <div id="paymentAtmBody">

                            </div>
                        </div>
                    </div>
                    `

                    let ewallet = `
                    <div class="card">
                        <div class="card-body">
                            <select onchange="showPaymentContent(this.value)" >
                              <option disabled selected >Pilih Jenis E-Wallet</option>
                              @foreach ( $ewallets as $data )
                                <option name="jenisBank" value="{{ $data->ewallet }}">{{  strtoupper($data->ewallet) }}</option>
                              @endforeach
                            </select>
                            <div id="paymentAtmBody">
                            </div>
                        </div>
                    </div>
                    `


                payment.addEventListener('change',function(){
                    const selected = payment.value;

                    containerPayment.innerHTML = '';

                    if( selected === "atm" ) containerPayment.innerHTML = Atm;
                    if( selected === "ewallet") containerPayment.innerHTML = ewallet;
                    // if(selected === 'atm'){
                    //     containerPayment.innerHTML = Atm;
                    // }else if(selected === 'ewallet'){
                    //         containerPayment.innerHTML = ewallet;
                    // }


                })


            </script>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
