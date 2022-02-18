//Ici, on appelle notre URL de recherche. La fonction  then  convertit la réponse de notre API en JSON et la retourne. En cas d'erreur, on passe automatiquement dans le  catch  et on affiche une erreur à l'écran.//
import axios from 'axios';

export default class PersonList extends React.Component {
    state = {
        persons: []
    }

    componentDidMount() {
        axios.get('http://localhost:80/projet-bloc3/models/recipes/selectRecipe.php')
            .then(res => {
                const persons = res.data;
                this.setState({ persons });
            })
    }
}