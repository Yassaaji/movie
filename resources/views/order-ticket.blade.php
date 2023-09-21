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
    <link rel="stylesheet" href="css/ticket.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

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
              <input type="checkbox" name="tickets" id="s1" />
              <label for="s1" class="seat booked"></label>
            </div>
          </div>
          <div class="timings">
            <div class="dates">
              <input type="radio" name="date" id="d1" checked />
              <label for="d1" class="dates-item">
                <div class="day">Sun</div>
                <div class="date">11</div>
              </label>
              <input type="radio" id="d2" name="date" />
              <label class="dates-item" for="d2">
                <div class="day">Mon</div>
                <div class="date">12</div>
              </label>
              <input type="radio" id="d3" name="date" />
              <label class="dates-item" for="d3">
                <div class="day">Tue</div>
                <div class="date">13</div>
              </label>
              <input type="radio" id="d4" name="date" />
              <label class="dates-item" for="d4">
                <div class="day">Wed</div>
                <div class="date">14</div>
              </label>
              <input type="radio" id="d5" name="date" />
              <label class="dates-item" for="d5">
                <div class="day">Thu</div>
                <div class="date">15</div>
              </label>
              <input type="radio" id="d6" name="date" />
              <label class="dates-item" for="d6">
                <div class="day">Fri</div>
                <div class="date">16</div>
              </label>
              <input type="radio" id="d7" name="date" />
              <label class="dates-item" for="d7">
                <div class="day">Sat</div>
                <div class="date">17</div>
              </label>
            </div>
            <div class="times">
              <input type="radio" name="time" id="t1" checked />
              <label for="t1" class="time">11:00</label>
              <input type="radio" id="t2" name="time" />
              <label for="t2" class="time"> 14:30 </label>
              <input type="radio" id="t3" name="time" />
              <label for="t3" class="time"> 18:00 </label>
              <input type="radio" id="t4" name="time" />
              <label for="t4" class="time"> 21:30 </label>
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
                <th scope="row">XI</th>
                <td>16.00</td>
                <td>
                  <div class="price">
        <div class="total">
            <span>Total   <span class="count">0</span></span>
            <div class="amount">0</div>
        </div>
                </td>
                <td>A2</td>
            </tr>
        </tbody>
    </table>

    <!-- Jarak antara tabel dan dropdown -->
    <div class="spacing"></div>

    <div class="payment-method">
        <label for="payment">Metode Pembayaran:</label>
        <select id="payment" name="payment" required>
            <option value="credit_card">Kartu Kredit</option>
            <option value="debit_card">Kartu Debit</option>
            <option value="paypal">PayPal</option>
            <option value="cash">Tunai</option>
        </select>
    </div>

   <button class="btn btn-primary" type="button" style="background-color: blue; color: white;">Book</button>                

    <div class="price">
        <div class="total">
            <span>Tickets: <span class="count">0</span></span>
            <div class="amount">0</div>
        </div>
    </div>

</div>






    <script>
      let seats = document.querySelector(".all-seats");
      for (var i = 0; i < 59; i++) {
        let randint = Math.floor(Math.random() * 2);
        let booked = randint === 1 ? "booked" : "";
        seats.insertAdjacentHTML(
          "beforeend",
          '<input type="checkbox" name="tickets" id="s' +
            (i + 2) +
            '" /><label for="s' +
            (i + 2) +
            '" class="seat ' +
            booked +
            '"></label>'
        );
      }

      let tickets = seats.querySelectorAll("input");
      tickets.forEach((ticket) => {
        ticket.addEventListener("change", () => {
          let amount = document.querySelector(".amount").innerHTML;
          let count = document.querySelector(".count").innerHTML;
          amount = Number(amount);
          count = Number(count);

          if (ticket.checked) {
            count += 1;
            amount += 200;
          } else {
            count -= 1;
            amount -= 200;
          }
          document.querySelector(".amount").innerHTML = amount;
          document.querySelector(".count").innerHTML = count;
        });
      });
    </script>
  </body>
</html>