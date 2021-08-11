// for every element with the class ".ref" to an element with an id that matches the pattern: "note-##"
// when you hover over the link
// underline the "note-##" element

let refs = document.querySelectorAll(".ref");

for (let i = 0; i < refs.length; i++) {
  let currentRef = refs[i];
  let noteId = currentRef.getAttribute("href");
  let note = document.querySelectorAll(noteId)[0];

  currentRef.addEventListener("mouseover", function() {
    note.classList.add("underlined")
  });
  currentRef.addEventListener("mouseout", function() {
    note.classList.remove("underlined")
  });
}
// document.getElementById("")
