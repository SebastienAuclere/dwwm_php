namespace TableauEvaluation
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double[] numbers = new double[] { 2, 4, 1, 8, 6, 14, 23, 25, 7, 42 };
            double temp = 0;
            double moyenne = 0;


           /* for (int i = 0; i <= numbers.Length - 1; i++)
            {
                if(numbers[i] > temp)
                {
                    temp = numbers[i];
                }

                moyenne = moyenne + numbers[i] / numbers.Length;
            } */

            Console.WriteLine("La plus grande valuer du tableau vaut : " + Math.Pow(temp,2));
            Console.WriteLine("La plus moyenne du tableau vaut : " + moyenne);

            temp = numbers.Max();
            moyenne = numbers.Average();

            Console.WriteLine("La plus grande valuer du tableau vaut : " + Math.Pow(temp, 2));
            Console.WriteLine("La plus moyenne du tableau vaut : " + moyenne);

        }
    }
}