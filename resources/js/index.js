"use strict";

const { get } = require("lodash");

// const { split } = require("lodash");

window.addEventListener("load", ()=>{
  getCityData();
});
const content = document.querySelector(".content");

const btn = document.getElementById("btn");

const btnPush = document.querySelector(".btn-push");

const oneMore = document.getElementById("onemore");

const p = document.querySelector(".city-name");

const a = document.getElementById("tweet");

let tweetUrl = "https://twitter.com/intent/tweet?url=https://www.japanramdom.site/&text=";


const cityList = ["日本", "北海道", "青森県","岩手県", "宮城県", "秋田県", "山形県", "福島県", "茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県", "新潟県", "富山県","富山県", "福井県", "山梨県", "長野県", "岐阜県", "静岡県", "愛知県", "三重県", "滋賀県", "京都府", "大阪府", "兵庫県", "奈良県", "和歌山県", "鳥取県", "島根県", "岡山県", "広島県", "山口県", "徳島県", "香川県", "愛媛県", "高知県", "福岡県", "佐賀県", "長崎県", "熊本県", "大分県", "宮崎県", "鹿児島県", "沖縄県"];

function getCityData(){
  let num = String(Math.floor(Math.random() * 48));
  const cityName = cityList[num];
  // console.log(cityName);
  if(num.length != 1){
    num = num;
  } else {
    num = "" + 0 + num;
  }
  // console.log(num);
  const url = "https://www.land.mlit.go.jp/webland/api/CitySearch?area=" + num;
  // console.log(url);
  fetch(url)
  .then(response => {
  return response.json();
  })
  .then(data=>{
    let i = data.data.length;
    i = Math.floor(Math.random() * i);
    return name = cityName + data.data[i].name;
  });
  return name;
}

btn.addEventListener("click", ()=>{
  const cityName = getCityData();
  // const p = document.createElement("p");
  p.textContent = cityName;
  // cityname.appendChild(p);
  tweetUrl = tweetUrl + cityName + "に飛ばされました！" + "&hashtags=日本全国いったったー";
  a.href = tweetUrl
  content.classList.add("active");
  btnPush.classList.add("pushed");
  oneMore.classList.remove("pushed");  
}, {
  once: true
});

oneMore.addEventListener("click", ()=>{
  preventDefault();
  const cityName = getCityData();
  // const p = document.createElement("p");
  p.textContent = cityName;
  // cityname.appendChild(p);
  tweetUrl = tweetUrl + cityName + "に飛ばされました！";
  a.href = tweetUrl;
  content.classList.add("active");
  btnPush.classList.add("pushed");
  }, {
  once: true
});


