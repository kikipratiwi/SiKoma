function setIDRFormat(id) {
    if (document.getElementById(id).value != "") {
      document.getElementById(id).value = parseFloat(document.getElementById(id).value.replace(/\//g, ""))
        .toString()
        .replace(/\B(?=(\d{3})+(?!\d))/g, "/");
    }
  }