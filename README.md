Condorcet API
===========================

Minimal http API sitting on the capabilities of the class **[Condorcet](https://github.com/julien-boudry/Condorcet_Schulze-PHP_Class)**. Red it documentation ! And read the very very short and simple code of this API.

### HTTP Post Param :   
**candidates** _Text file or Json listing the candidates_     
**votes** _Text file or Json listing the candidates_     
_(optionnal)_ **methods** _Algorithm name to use. Default is Schulze Winning_     


### Return :    

**Success** Json array of ranking    
**Error** Json array like ```php <?php json_encode( array( 'Error' => $e->getMessage() ) );```     
**absence of certain parameters.** : Json false value    