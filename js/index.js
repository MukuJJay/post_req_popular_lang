const formData = new FormData();
formData.append("name", "mukul");
formData.append("code", "ba5e3f51a592e97df7ad94b2c1cd68fd");

fetch("https://dev.29kreativ.com/recruitment/levels/", {
  method: "POST",
  headers: {
    Authorization: `Bearer ba5e3f51a592e97df7ad94b2c1cd68fd`,
  },
  body: formData,
})
  .then((res) => res.text())
  .then((data) => document.write(data));
