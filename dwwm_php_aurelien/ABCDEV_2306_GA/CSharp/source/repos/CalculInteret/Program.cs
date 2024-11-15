namespace CalculInteret
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double somme;
            double interet;
            double annees;
            double resultatsimple;
            double resultatcompose;
            string saisie;

            Console.WriteLine("Saisir la somme");
            saisie = Console.ReadLine();
            somme = double.Parse(saisie);

            Console.WriteLine("Saisir les interets");
            saisie = Console.ReadLine();
            interet = double.Parse(saisie);

            Console.WriteLine("Saisir le nombre d'annees");
            saisie = Console.ReadLine();
            annees = double.Parse(saisie);

            resultatsimple = somme * (1 + annees * interet / 100);
            resultatcompose = somme * Math.Pow(1 + interet / 100, annees);

            Console.WriteLine("Le resultat de l'interet simple vaut " + resultatsimple + " et le résultat de l'interet composé vaut " + resultatcompose);

        }
    }
}