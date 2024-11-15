namespace Conversion
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double kilo;
            double miles;
            string saisie;

            do
            {
                Console.WriteLine("Saisir la distance");
                saisie = Console.ReadLine();
                kilo = double.Parse(saisie);
            }
            while (kilo < 1/100 || kilo > 1000000);

            if (kilo >= 1 / 100 || kilo <= 1000000)
            {
                Console.WriteLine(kilo + " km  = " + kilo / 1.609 + " miles"); 
            }

        }
    }
}