
class CustomArray {
    constructor(...elements) 
    {
        this.#innerArray = elements;
    }

    shakeElements() 
    {
        let currentIndex = this.#innerArray.length, randomIndex;
        while (currentIndex != 0) 
        {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex--;

            [this.#innerArray[currentIndex], this.#innerArray[randomIndex]] = 
            [this.#innerArray[randomIndex], this.#innerArray[currentIndex]];
        }
        return this.#innerArray;
    }

    addElement(elem) 
    {
        if (elem)
            this.#innerArray.push(elem);
        else
            debugger;
    }

    getLast() 
    {
        if (this.#innerArray.length > 0)
            return this.#innerArray[this.#innerArray.length - 1];
    }

    printAll() 
    {
        console.log(this.#innerArray);
    }

    #innerArray = [];
}


class ListElement {
    constructor(text, option) 
    {
        this.#text = text;
        this.#option = option;
    }

    toString() 
    {
        return this.#text + " " + this.#option;
    }

    #text
    #option
}
