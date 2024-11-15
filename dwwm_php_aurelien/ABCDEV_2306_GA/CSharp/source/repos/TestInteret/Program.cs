namespace TestInteret
{
    internal class Program
    {
        static void Main(string[] args)
        {
            /* double[] interet = new double[11];
            int i = 0;

            for (i = 0; i < interet.Length; i++)
            {
                interet[i] = 100 * Math.Pow(1 + 0.05, i);
                Console.WriteLine(interet[i]);
            } */

            double[] interet = new double[10];
            double somme;
            int i;
            interet[0] = 1000;
            
            for (i = 1; i < interet.Length; i++)
            {
                interet[i] = interet[i-1]*(1+0.03);
                somme = interet[i] - 1000;
                Console.WriteLine(somme);
            } 

        }
    }
}