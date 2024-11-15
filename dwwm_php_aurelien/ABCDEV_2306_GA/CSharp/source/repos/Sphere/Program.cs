namespace Sphere
{
    internal class Program
    {
        static void Main(string[] args)
        {
            double rayon;
            double resultataire;
            double resultatvolume;
            string saisie;

            Console.WriteLine("Saisir le rayon");
            saisie = Console.ReadLine();
            rayon = double.Parse(saisie);

            resultataire = 4 * Math.PI * Math.Pow(rayon, 2);
            resultatvolume = 4 / 3 * Math.PI * Math.Pow(rayon, 3);

            Console.WriteLine("L'aire de la sphere vaut " + resultataire + " et le volume de la sphere vaut " + resultatvolume);

        }
    }
}