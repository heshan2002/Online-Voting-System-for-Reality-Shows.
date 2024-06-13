function calculateVotes() {
    // Get all radio buttons
    const options = document.getElementsByName('option');

    // Initialize counters for each option
    let option1Count = 0;
    let option2Count = 0;
    let option3Count = 0;
    let option4Count = 0;
    let option5Count = 0;

    // Iterate over the radio buttons to count votes
    for (let i = 0; i < options.length; i++) {
      if (options[i].checked) {
        const selectedOption = options[i].value;

        // Increment the count for the selected option
        if (selectedOption === 'option1') {
          option1Count++;
        } else if (selectedOption === 'option2') {
          option2Count++;
        } else if (selectedOption === 'option3') {
          option3Count++;
        } else if (selectedOption === 'option4') {
          option3Count++;
        } else if (selectedOption === 'option5') {
          option3Count++;
        }
      }
    }

    // Display the results
    document.getElementById('option1Result').textContent = `Candidate 1: ${option1Count} votes`;
  
    document.getElementById('option2Result').textContent = `Candidate 2: ${option2Count} votes`;
 
    document.getElementById('option3Result').textContent = `Candidate 3: ${option3Count} votes`;
   
    document.getElementById('option4Result').textContent = `Candidate 4: ${option4Count} votes`;
 
    document.getElementById('option5Result').textContent = `Candidate 5: ${option5Count} votes`;


  }
