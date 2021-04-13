let count = 0;
let counttxt = document.querySelector("#count");

window.addEventListener("DOMContentLoaded", (e) => {
  getView();
});

// handle posting data to db
function getView() {
  $.ajax({
    url: "insert.php",
    method: "POST",
    dataType: "text",
    data: {
      count: count,
    },
    success: (data, status) => {
      console.log(data);
    },
  });
}

setInterval(() => {
  getData();
}, 1000);

// handle getting dada from database

function getData(data) {
  $.ajax({
    url: "fetch.php",
    method: "POST",
    dataType: "text",
    data: {
      fetch: true,
    },
    success: (data, status) => {
      counttxt.textContent = data;
    },
  });
}

async function userLocation() {
    const API_KEY = "";

  let locationcont = document.querySelector(".v-loc");
  let url =
    `https://ipgeolocation.abstractapi.com/v1/?api_key=${API_KEY}`;

  let fetchdata = await fetch(url);
  let data = await fetchdata.json();
  const { city, country, ip_address, latitude, longitude } = data;

  let loader = document.querySelector(".loader-cont");
  if (location.innerHTML = "") {
    loader.style.display = "flex";
    locationcont.innerHTML = "";
  } else {
    setTimeout(() => {
        loader.style.display = "none";
    }, 2000);
    locationcont.innerHTML = `
    <div class="location">
    <div class="box">
        <div class="icon"><ion-icon name="location-outline"></ion-icon></div>
        <b><p>${country}</p></b>
    </div>
    <div class="box">
        <div class="icon"><ion-icon name="locate-outline"></ion-icon></div>
        <b><p>${city}</p></b>
    </div>
  </div>
  <div class="geo">
    <div class="box">
        <div class="box-1">
            <span class="icon"><ion-icon name="compass-outline"></ion-icon></span> <i>lat</i>
            <br>
            <small>${latitude}</small>
        </div>
        <div class="box-1">
            <span class="icon"><ion-icon name="compass-outline"></ion-icon></span> <i>lng</i>
            <br>
            <small>${longitude}</small>
        </div>
    </div>
    <div class="ip">
        <span class="icon"><ion-icon name="navigate-outline"></ion-icon></span>
        <small>IP ADDRESS</small>
        <h3><i>${ip_address}</i></h3>
    </div>
  </div>
    `;
  }
}
userLocation();
