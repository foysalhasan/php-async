async function filter(cat, ev) {
  const btns = document.querySelectorAll(".btn")
  if (ev?.type === "click") {
    btns.forEach((btn) => {
      btn.classList.remove("active")
    })
    ev.target.classList.add("active")
  } else {
    btns[0].classList.add("active")
  }
  try {
    const res = await axios.post("/filter.php", {
      filter: cat,
    })
    const data = res.data
    genCode(data)
  } catch (err) {
    console.log(err)
  }
}

function genCode(data) {
  const wrapper = document.getElementById("data_wrapper")
  wrapper.innerHTML = ""
  if (typeof data !== "object") {
    wrapper.textContent = data
    return
  }
  data.forEach((item) => {
    const div = document.createElement("div")
    div.className =
      "p-3 bg-white rounded shadow border text-teal-600 font-semibold uppercase text-center box"
    div.textContent = item.title
    wrapper.appendChild(div)
  })
  gsap.from(".box", {
    duration: 0.5,
    y: 100,
    opacity: 0,
    ease: "power4.out",
    stagger: 0.5,
  })
}

// filter("nature")
window.addEventListener("DOMContentLoaded", filter("nature"))
