import React from 'react';

const Car = ({nom,description,prix})=>{
        
        if(nom)
        return (
           <tr style={ {backgroundColor: 'pink',color :'white'} }>
           
               <td>{nom}</td>
                <td>{description}</td>
                <td>{prix}</td>
           </tr>
        )
        return (
           null
         )
    
}
export default Car;