<template>
    <div class="container">
        <div class="content1">
            <div class="childcontent1">
                <div id="card1" class="card card1" @click="highlightCard(1)" :style="card1Style" >
                    <h1>Cashier</h1>
                </div>
                <div  id="card2"  class="card card2" @click="highlightCard(2)" :style="card2Style">
                    <h1>ASSESOR</h1>
                    
                </div>
            </div>
        </div>
        <!-- <____content2___________> -->
        <div class="content2">
          <div class="container">
            <div class="childcontent2">
                <div class="quenumber">
                    <h2>Current no.</h2>
                    <h1>1</h1>
                </div>
                <div class="quenumber">
                    <div class="qeunumbercontent">
                        <h3>Next number</h3>
                        <h3>2</h3>
                    </div>
                </div>
            </div>
          </div>
           <div class="childbutton">
            <button type="btn">Print</button>
           </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      highlightedCard: null
    };
  },
  computed: {
    card1Style() {
      return {
        backgroundColor: this.highlightedCard === 1 ? '#004f86' : 'white',
        color: this.highlightedCard === 1? 'white':'black',
        padding: '10px',
        borderRadius: '5px',
        cursor: 'pointer'
      };
    },
    card2Style() {
      return {
        backgroundColor: this.highlightedCard === 2 ? '#004f86' : 'white',
        color: this.highlightedCard === 2? 'white':'black',
        padding: '10px',
        borderRadius: '5px',
        cursor: 'pointer'
      };
    }
  },
  methods: {
    highlightCard(cardNumber) {
      if (this.highlightedCard === cardNumber) {
        this.highlightedCard = null; // Unhighlight if clicked again
      } else {
        this.highlightedCard = cardNumber; // Highlight the clicked card
      }
    }
  }
};
</script>

<style scoped>
@import '/resources/css/guard/guard.css';
</style>



