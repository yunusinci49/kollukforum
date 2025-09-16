// Remove the default cards if cards are present in the localStorage object
if (localStorage.cards) {
  $('.cards').children().remove();
  $('.cards').append(JSON.parse(localStorage.getItem('cards')));
}

// Delete the existing cards and add the new cards
// Simpler than pushing/splicing an array
const setStorage = () => {
  localStorage.removeItem('cards');
  localStorage.setItem('cards', JSON.stringify($('.cards').html()));
};

// Wrap or unwrap the card title in del tags for a strikeout effect
$('.cards').on('click', '#done', () => {
  if ($(event.target).next().is($('del'))) {
    $(event.target).next().children().unwrap();
    setStorage();
  } else {
    $(event.target).next().wrap('<del></del>');
    setStorage();
  }
});

// Delete the selected card and update localStorage
$('.cards').on('click', '#delete', () => {
  $(event.target).offsetParent().remove();
  setStorage();
});

// Append new card on submit and update localStorage
$('form').on('submit', (event) => {
  event.preventDefault();
  const title = $('input').val();
  const card = `
    <div class="card">
      <div class="card-block">
        <button id="done" type="button" class="btn btn-link float-right">❌</button>
        <button id="delete" type="button" class="btn btn-link float-right mr-3">✔️</button>
        <p class="card-title lead">${title}</p>
      </div>
    </div>
  `;
  $('.cards').append(card);
  // Reset the form input field
  $('form').trigger('reset');
  setStorage();
});