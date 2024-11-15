namespace SecteurCirculaire
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double rayon;
            double angle;
            double resultat;
            string saisie;

            Console.WriteLine("Saisir le rayon");
            saisie = Console.ReadLine();
            rayon = double.Parse(saisie);

            Console.WriteLine("Saisir l'aire");
            saisie = Console.ReadLine();
            angle = double.Parse(saisie);

            resultat = (Math.PI * Math.Pow(rayon, 2) * angle) / 360;
            Console.WriteLine("L'aire du secteur circulaire vaut " + resultat);

        }
    }
}