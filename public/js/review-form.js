document.querySelectorAll('[style*="row-reverse"]').forEach((container) => {
  const labels = container.querySelectorAll("label");
  labels.forEach((label, index) => {
    label.addEventListener("mouseover", () => {
      labels.forEach((l, i) => {
        l.style.color = i >= index ? "#ffc107" : "#ccc";
      });
    });
    label.addEventListener("mouseout", () => {
      updateSelected(container, labels);
    });
    label.addEventListener("click", () => {
      setTimeout(() => updateSelected(container, labels), 10);
    });
  });
});

function updateSelected(container, labels) {
  const checked = container.querySelector("input:checked");
  if (checked) {
    const val = parseInt(checked.value);
    labels.forEach((l, i) => {
      l.style.color = i >= 5 - val ? "#ffc107" : "#ccc";
    });
  } else {
    labels.forEach((l) => (l.style.color = "#ccc"));
  }
}
