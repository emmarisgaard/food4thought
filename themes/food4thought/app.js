
// Javascript til accordion filter (archive-recipes)
document.querySelectorAll('.recipeFilter').forEach(filter => {

    const title = filter.querySelector('label:first-child');

    title.addEventListener('click', () => {
        filter.classList.toggle('collapsed');
    });

});
