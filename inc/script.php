<script >
  var swiper = new Swiper(".swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop:true,
    autoplay:{
      disableoninteraction:false,
      delay:1500,
    }
   
  });
  const places = [
    "New York",
    "Los Angeles",
    "Chicago",
    "Houston",
    "Phoenix",
    "Philadelphia",
    "San Antonio",
    "San Diego",
    "Dallas",
    "San Jose",
    "Austin",
    "Jacksonville",
    "Fort Worth",
    "Columbus",
    "Charlotte",
    "San Francisco",
    "Indianapolis",
    "Seattle",
    "Denver",
    "Washington"
];

$(document).ready(function() {
    $('#search-input').on('input', function() {
        const input = $(this).val().toLowerCase();
        const suggestions = places.filter(place => place.toLowerCase().includes(input));
        displaySuggestions(suggestions);
    });

    function displaySuggestions(suggestions) {
        const suggestionsList = $('#suggestions-list');
        suggestionsList.empty();

        if (suggestions.length > 0) {
            suggestions.forEach(suggestion => {
                const li = $('<li></li>').addClass('list-group-item').text(suggestion);
                li.on('click', function() {
                    $('#search-input').val(suggestion);
                    suggestionsList.empty();
                });
                suggestionsList.append(li);
            });
        }
    }
});
$(document).ready(function() {
            $('#myForm').on('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                // Check if all required fields are filled
                if (this.checkValidity()) {
                    $('#formModal').modal('show'); // Show the modal
                    this.reset(); // Reset the form
                } else {
                    this.reportValidity(); // Highlight the empty fields
                }
            });
              
        });
        


            //Thank you popup modal

       $(document).ready(function() {
            $('#myFormm').on('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                // Check if all required fields are filled
                if (this.checkValidity()) {
                    $('#formModal').modal('hide'); // Hide the form modal
                    $('#thankYouModal').modal('show'); // Show the thank you modal
                } else {
                    this.reportValidity(); // Highlight the empty fields
                }
            });
            
        });


        var swiper = new Swiper(".review", {
        effect: "flip",
        grabCursor: true,
        autoplay: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

     function move(){
        window.location.href = "index.php #direct";
     }
</script>