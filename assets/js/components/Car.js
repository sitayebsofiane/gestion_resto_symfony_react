import React from 'react';

const Car = ({nom,color,year})=>{
        const colorInfo = color ? ( `${color}`):( 'neat');
        
        if(nom)
        return (
           <tr style={ {backgroundColor: 'pink',color :'white'} }>
           
               <td>{nom}</td>
                <td>{colorInfo}</td>
                <td>{year}</td>
           </tr>
        )
        return (
           null
         )
    
}
export default Car;